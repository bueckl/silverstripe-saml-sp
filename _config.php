<?php

// @TODO re-routing should only work when it is enabled in config and there is an active IdP.

// Gets set in config, so we can bypass saml authetication and locally log in to the cms

// if (Config::inst()->get('SingleSignOnConfig', 'EnableSingleSignOn')) {
//     // process all request of '/security' with the SAML controller.
//     Config::inst()->update('Director', 'rules', array(
//         'Security//$Action/$ID/$OtherID' => 'SAMLSecurity',
//         'security//$Action/$ID/$OtherID' => 'SAMLSecurity'
//     ));
// }
//
