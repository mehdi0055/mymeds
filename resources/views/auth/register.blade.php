{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}




<x-guest-layout>
    <div id="wrapper">
        <div class="vertical-align-wrap">

            <div class="vertical-align-middle auth-main">

                <div class="auth-box box-register">
                    <div class="top">
                        <img src="{{ asset('landing/assets/img/mymed_logo_light.png') }}" alt="My MED">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Create an account </p>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="row">
                                        <div class="form-group form-float col-6">
                                            <input type="text" class="form-control" placeholder="Your first name *"
                                                name="fname">
                                        </div>
                                        <div class="form-group form-float col-6">
                                            <input type="text" class="form-control" placeholder="Your last name *"
                                                name="lname">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float  col-6">
                                            <input type="email" class="form-control"
                                                placeholder="Your email address *" name="email">
                                        </div>
                                        <div class="form-group form-float  col-6">
                                            <input type="number" class="form-control" placeholder="Your phone number *"
                                                name="phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float  col-6">
                                            <input type="text" class="form-control" placeholder="Your CIN *">
                                        </div>
                                        <div class="form-group form-float  col-6">
                                            <input type="text" class="form-control"
                                                placeholder="Your Doctor Code *" name="code">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group form-float  col-6">
                                            <input type="text" class="form-control" placeholder="State *"
                                                name="state">
                                        </div>
                                        <div class="form-group form-float  col-4">
                                            <input type="text" class="form-control" placeholder="City *" name="city">
                                        </div>
                                        <div class="form-group form-float  col-2">
                                            <input type="text" class="form-control" placeholder="Zip Code *"
                                                name="zipcode">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float  col-12">
                                            <textarea name="address" cols="30" rows="3" placeholder="Address *" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>

                                </fieldset>
                                <h3>Cabinet Information</h3>
                                <fieldset>
                                    <div class="row">
                                        <div class="form-group form-float col-6">
                                            <input type="text" name="cabinetName" placeholder="Cabinet Medical Name  *"
                                                class="form-control">
                                        </div>
                                        <div class="form-group form-float col-6">
                                            <input type="text" name="cabinetPhone" placeholder="Cabinet Phone Number *"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-6">
                                            <input type="email" name="cabinetEmail"
                                                placeholder="Cabinet Email Address *" class="form-control">
                                        </div>
                                        <div class="form-group form-float col-6">
                                            @php

                                                $types = App\Models\TypeCabinet::orderBy('name','asc')->where('status',0)->get();
                                            @endphp
                                            <select name="" class="form-control" id="">
                                                <option value="">select type</option>

                                                @foreach ($types as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-12">
                                            <textarea name="address" cols="30" rows="3" placeholder="Address *" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Finish</h3>
                                <fieldset>
                                    <div class="row">
                                        <div class="form-group form-float col-12">
                                            <input type="file" class="dropify-fr">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-float col-12">
                                            <div class="fancy-checkbox">
                                                <label>
                                                    <input type="checkbox" name="terms" id="terms">
                                                    <span></span>
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="#termsModal" data-toggle="modal" data-target="#termsModal" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="#privacyModal" data-toggle="modal" data-target="#privacyModal" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                            </form>
                            <div class="bottom text-center">
                                <span class="helper-text">Already have an account?
                                    <a href="{{ route('login') }}">Login</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="termsModalLabel"> Terms of Service</h4>
                </div>
                <div class="modal-body">
                    <h2><strong>Terms and Conditions</strong></h2>
                    <p>Welcome to MYMED!</p>
                    <p>These terms and conditions outline the rules and regulations for the use of MEDYOUIN's Website,
                        located at mymed.ma.</p>
                    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use
                        MYMED if you do not agree to take all of the terms and conditions stated on this page.</p>
                    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer
                        Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this
                        website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We",
                        "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client
                        and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary
                        to undertake the process of our assistance to the Client in the most appropriate manner for the
                        express purpose of meeting the Client’s needs in respect of provision of the Company’s stated
                        services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above
                        terminology or other words in the singular, plural, capitalization and/or he/she or they, are
                        taken as interchangeable and therefore as referring to same.</p>
                    <h3><strong>Cookies</strong></h3>
                    <p>We employ the use of cookies. By accessing MYMED, you agreed to use cookies in agreement with the
                        MEDYOUIN's Privacy Policy. </p>
                    <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit.
                        Cookies are used by our website to enable the functionality of certain areas to make it easier
                        for people visiting our website. Some of our affiliate/advertising partners may also use
                        cookies.</p>
                    <h3><strong>License</strong></h3>
                    <p>Unless otherwise stated, MEDYOUIN and/or its licensors own the intellectual property rights for
                        all material on MYMED. All intellectual property rights are reserved. You may access this from
                        MYMED for your own personal use subjected to restrictions set in these terms and conditions.</p>
                    <p>You must not:</p>
                    <ul>
                        <li>Republish material from MYMED</li>
                        <li>Sell, rent or sub-license material from MYMED</li>
                        <li>Reproduce, duplicate or copy material from MYMED</li>
                        <li>Redistribute content from MYMED</li>
                    </ul>
                    <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the
                        help of the <a
                            href="https://www.privacypolicies.com/blog/sample-terms-conditions-template/">Terms And
                            Conditions Template</a>.</p>
                    <p>Parts of this website offer an opportunity for users to post and exchange opinions and
                        information in certain areas of the website. MEDYOUIN does not filter, edit, publish or review
                        Comments prior to their presence on the website. Comments do not reflect the views and opinions
                        of MEDYOUIN,its agents and/or affiliates. Comments reflect the views and opinions of the person
                        who post their views and opinions. To the extent permitted by applicable laws, MEDYOUIN shall
                        not be liable for the Comments or for any liability, damages or expenses caused and/or suffered
                        as a result of any use of and/or posting of and/or appearance of the Comments on this website.
                    </p>
                    <p>MEDYOUIN reserves the right to monitor all Comments and to remove any Comments which can be
                        considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
                    <p>You warrant and represent that:</p>
                    <ul>
                        <li>You are entitled to post the Comments on our website and have all necessary licenses and
                            consents to do so;</li>
                        <li>The Comments do not invade any intellectual property right, including without limitation
                            copyright, patent or trademark of any third party;</li>
                        <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise
                            unlawful material which is an invasion of privacy</li>
                        <li>The Comments will not be used to solicit or promote business or custom or present commercial
                            activities or unlawful activity.</li>
                    </ul>
                    <p>You hereby grant MEDYOUIN a non-exclusive license to use, reproduce, edit and authorize others to
                        use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
                    <h3><strong>Hyperlinking to our Content</strong></h3>
                    <p>The following organizations may link to our Website without prior written approval:</p>
                    <ul>
                        <li>Government agencies;</li>
                        <li>Search engines;</li>
                        <li>News organizations;</li>
                        <li>Online directory distributors may link to our Website in the same manner as they hyperlink
                            to the Websites of other listed businesses; and</li>
                        <li>System wide Accredited Businesses except soliciting non-profit organizations, charity
                            shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                    </ul>
                    <p>These organizations may link to our home page, to publications or to other Website information so
                        long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship,
                        endorsement or approval of the linking party and its products and/or services; and (c) fits
                        within the context of the linking party’s site.</p>
                    <p>We may consider and approve other link requests from the following types of organizations:</p>
                    <ul>
                        <li>commonly-known consumer and/or business information sources;</li>
                        <li>dot.com community sites;</li>
                        <li>associations or other groups representing charities;</li>
                        <li>online directory distributors;</li>
                        <li>internet portals;</li>
                        <li>accounting, law and consulting firms; and</li>
                        <li>educational institutions and trade associations.</li>
                    </ul>
                    <p>We will approve link requests from these organizations if we decide that: (a) the link would not
                        make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does
                        not have any negative records with us; (c) the benefit to us from the visibility of the
                        hyperlink compensates the absence of MEDYOUIN; and (d) the link is in the context of general
                        resource information.</p>
                    <p>These organizations may link to our home page so long as the link: (a) is not in any way
                        deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party
                        and its products or services; and (c) fits within the context of the linking party’s site.</p>
                    <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to
                        our website, you must inform us by sending an e-mail to MEDYOUIN. Please include your name, your
                        organization name, contact information as well as the URL of your site, a list of any URLs from
                        which you intend to link to our Website, and a list of the URLs on our site to which you would
                        like to link. Wait 2-3 weeks for a response.</p>
                    <p>Approved organizations may hyperlink to our Website as follows:</p>
                    <ul>
                        <li>By use of our corporate name; or</li>
                        <li>By use of the uniform resource locator being linked to; or</li>
                        <li>By use of any other description of our Website being linked to that makes sense within the
                            context and format of content on the linking party’s site.</li>
                    </ul>
                    <p>No use of MEDYOUIN's logo or other artwork will be allowed for linking absent a trademark license
                        agreement.</p>
                    <h3><strong>iFrames</strong></h3>
                    <p>Without prior approval and written permission, you may not create frames around our Webpages that
                        alter in any way the visual presentation or appearance of our Website.</p>
                    <h3><strong>Content Liability</strong></h3>
                    <p>We shall not be hold responsible for any content that appears on your Website. You agree to
                        protect and defend us against all claims that is rising on your Website. No link(s) should
                        appear on any Website that may be interpreted as libelous, obscene or criminal, or which
                        infringes, otherwise violates, or advocates the infringement or other violation of, any third
                        party rights.</p>
                    <h3><strong>Your Privacy</strong></h3>
                    <p>Please read Privacy Policy</p>
                    <h3><strong>Reservation of Rights</strong></h3>
                    <p>We reserve the right to request that you remove all links or any particular link to our Website.
                        You approve to immediately remove all links to our Website upon request. We also reserve the
                        right to amen these terms and conditions and it’s linking policy at any time. By continuously
                        linking to our Website, you agree to be bound to and follow these linking terms and conditions.
                    </p>
                    <h3><strong>Removal of links from our website</strong></h3>
                    <p>If you find any link on our Website that is offensive for any reason, you are free to contact and
                        inform us any moment. We will consider requests to remove links but we are not obligated to or
                        so or to respond to you directly.</p>
                    <p>We do not ensure that the information on this website is correct, we do not warrant its
                        completeness or accuracy; nor do we promise to ensure that the website remains available or that
                        the material on the website is kept up to date.</p>
                    <h3><strong>Disclaimer</strong></h3>
                    <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and
                        conditions relating to our website and the use of this website. Nothing in this disclaimer will:
                    </p>
                    <ul>
                        <li>limit or exclude our or your liability for death or personal injury;</li>
                        <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                        <li>limit any of our or your liabilities in any way that is not permitted under applicable law;
                            or</li>
                        <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                    </ul>
                    <p>The limitations and prohibitions of liability set in this Section and elsewhere in this
                        disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising
                        under the disclaimer, including liabilities arising in contract, in tort and for breach of
                        statutory duty.</p>
                    <p>As long as the website and the information and services on the website are provided free of
                        charge, we will not be liable for any loss or damage of any nature.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">I agree</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="privacyModalLabel">Privacy Policy</h4>
                </div>
                <div class="modal-body">
                    <h1>Privacy Policy for MEDYOUIN</h1>
                    <p>At MYMED, accessible from mymed.ma, one of our main priorities is the privacy of our visitors.
                        This Privacy Policy document contains types of information that is collected and recorded by
                        MYMED and how we use it.</p>
                    <p>If you have additional questions or require more information about our Privacy Policy, do not
                        hesitate to contact us.</p>
                    <p>This Privacy Policy applies only to our online activities and is valid for visitors to our
                        website with regards to the information that they shared and/or collect in MYMED. This policy is
                        not applicable to any information collected offline or via channels other than this website. Our
                        Privacy Policy was created with the help of the <a
                            href="https://www.termsfeed.com/privacy-policy-generator/">Free Privacy Policy
                            Generator</a>.</p>
                    <h2>Consent</h2>
                    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                    <h2>Information we collect</h2>
                    <p>The personal information that you are asked to provide, and the reasons why you are asked to
                        provide it, will be made clear to you at the point we ask you to provide your personal
                        information.</p>
                    <p>If you contact us directly, we may receive additional information about you such as your name,
                        email address, phone number, the contents of the message and/or attachments you may send us, and
                        any other information you may choose to provide.</p>
                    <p>When you register for an Account, we may ask for your contact information, including items such
                        as name, company name, address, email address, and telephone number.</p>
                    <h2>How we use your information</h2>
                    <p>We use the information we collect in various ways, including to:</p>
                    <ul>
                        <li>Provide, operate, and maintain our website</li>
                        <li>Improve, personalize, and expand our website</li>
                        <li>Understand and analyze how you use our website</li>
                        <li>Develop new products, services, features, and functionality</li>
                        <li>Communicate with you, either directly or through one of our partners, including for customer
                            service, to provide you with updates and other information relating to the website, and for
                            marketing and promotional purposes</li>
                        <li>Send you emails</li>
                        <li>Find and prevent fraud</li>
                    </ul>
                    <h2>Log Files</h2>
                    <p>MYMED follows a standard procedure of using log files. These files log visitors when they visit
                        websites. All hosting companies do this and a part of hosting services' analytics. The
                        information collected by log files include internet protocol (IP) addresses, browser type,
                        Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the
                        number of clicks. These are not linked to any information that is personally identifiable. The
                        purpose of the information is for analyzing trends, administering the site, tracking users'
                        movement on the website, and gathering demographic information.</p>
                    <h2>Cookies and Web Beacons</h2>
                    <p>Like any other website, MYMED uses 'cookies'. These cookies are used to store information
                        including visitors' preferences, and the pages on the website that the visitor accessed or
                        visited. The information is used to optimize the users' experience by customizing our web page
                        content based on visitors' browser type and/or other information.</p>
                    <p>For more general information on cookies, please read <a
                            href="https://www.termsfeed.com/blog/sample-cookies-policy-template/#What_Are_Cookies">the
                            Cookies article on TermsFeed website</a>.</p>
                    <h2>Google DoubleClick DART Cookie</h2>
                    <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies,
                        to serve ads to our site visitors based upon their visit to www.website.com and other sites on
                        the internet. However, visitors may choose to decline the use of DART cookies by visiting the
                        Google ad and content network Privacy Policy at the following URL – <a
                            href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a>
                    </p>
                    <h2>Advertising Partners Privacy Policies</h2>
                    <P>You may consult this list to find the Privacy Policy for each of the advertising partners of
                        MYMED.</p>
                    <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons
                        that are used in their respective advertisements and links that appear on MYMED, which are sent
                        directly to users' browser. They automatically receive your IP address when this occurs. These
                        technologies are used to measure the effectiveness of their advertising campaigns and/or to
                        personalize the advertising content that you see on websites that you visit.</p>
                    <p>Note that MYMED has no access to or control over these cookies that are used by third-party
                        advertisers.</p>
                    <h2>Third Party Privacy Policies</h2>
                    <p>MYMED's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you
                        to consult the respective Privacy Policies of these third-party ad servers for more detailed
                        information. It may include their practices and instructions about how to opt-out of certain
                        options. </p>
                    <p>You can choose to disable cookies through your individual browser options. To know more detailed
                        information about cookie management with specific web browsers, it can be found at the browsers'
                        respective websites.</p>
                    <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                    <p>Under the CCPA, among other rights, California consumers have the right to:</p>
                    <p>Request that a business that collects a consumer's personal data disclose the categories and
                        specific pieces of personal data that a business has collected about consumers.</p>
                    <p>Request that a business delete any personal data about the consumer that a business has
                        collected.</p>
                    <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal
                        data.</p>
                    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of
                        these rights, please contact us.</p>
                    <h2>GDPR Data Protection Rights</h2>
                    <p>We would like to make sure you are fully aware of all of your data protection rights. Every user
                        is entitled to the following:</p>
                    <p>The right to access – You have the right to request copies of your personal data. We may charge
                        you a small fee for this service.</p>
                    <p>The right to rectification – You have the right to request that we correct any information you
                        believe is inaccurate. You also have the right to request that we complete the information you
                        believe is incomplete.</p>
                    <p>The right to erasure – You have the right to request that we erase your personal data, under
                        certain conditions.</p>
                    <p>The right to restrict processing – You have the right to request that we restrict the processing
                        of your personal data, under certain conditions.</p>
                    <p>The right to object to processing – You have the right to object to our processing of your
                        personal data, under certain conditions.</p>
                    <p>The right to data portability – You have the right to request that we transfer the data that we
                        have collected to another organization, or directly to you, under certain conditions.</p>
                    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of
                        these rights, please contact us.</p>
                    <h2>Children's Information</h2>
                    <p>Another part of our priority is adding protection for children while using the internet. We
                        encourage parents and guardians to observe, participate in, and/or monitor and guide their
                        online activity.</p>
                    <p>MYMED does not knowingly collect any Personal Identifiable Information from children under the
                        age of 13. If you think that your child provided this kind of information on our website, we
                        strongly encourage you to contact us immediately and we will do our best efforts to promptly
                        remove such information from our records.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">I agree</button>

                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
<script src="{{ asset('primary/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('primary/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('primary/assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('primary/assets/vendor/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('primary/assets/vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('primary/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('primary/assets/js/pages/forms/dropify.js') }}"></script>
<script src="{{ asset('primary/assets/js/pages/forms/form-wizard.js') }}"></script>
