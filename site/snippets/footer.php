<?= css('../assets/css/footer.css') ?>

<?= js('../assets/js/privacy_data.js') ?>

<?php
// /site/snippets/two-column-layout.php

// Default values
$color1 = $color1 ?? '#FFFFFF';
$color2 = $color2 ?? '#C29DE8';
$imprint_data="Reclaim - Ecofeminst Alliance
℅ Bachet
Käthe-Niederkirchner-Str. 18
10407 Berlin

Email: contact@reclaim-ecofeministalliance.org

Copyright © 2023 by Reclaim - Ecofeminist Alliance (Reclaim). All rights reserved. The content provided by this website is protected by copyright. The contents of this site may only be reproduced or electronically processed, copied and/or disseminated with the express written permission of Reclaim, unless copyright explicitly states otherwise.

Our website contains links to external websites. As these websites are beyond our control, we cannot assume any responsibility for their content and privacy policy. Legal liability lies exclusively with the operators of these external sites.
'";
$privacy = " Data Protection Declaration
In this declaration, we inform you about the collection of personal data when you use our website.

Personal data (usually referred to just as „data“ below) will only be processed by us to the extent necessary and for the purpose of providing a functional and user-friendly website, including its contents, and the services offered there.

Per Art. 4 No. 1 of Regulation (EU) 2016/679, i.e. the General Data Protection Regulation (hereinafter referred to as the „GDPR“), „processing“ refers to any operation or set of operations such as collection, recording, organization, structuring, storage, adaptation, alteration, retrieval, consultation, use, disclosure by transmission, dissemination, or otherwise making available, alignment, or combination, restriction, erasure, or destruction performed on personal data, whether by automated means or not.

The following privacy policy is intended to inform you in particular about the type, scope, purpose, duration, and legal basis for the processing of such data either under our own control or in conjunction with others. We also inform you below about the third-party components we use to optimize our website and improve the user experience which may result in said third parties also processing data they collect and control.

1. Information about us as controllers of your data
The party responsible for this website (the „controller“) for purposes of data protection law is:

Reclaim Ecofeminist Alliance
Käthe-Niederkirchner-Straße 18
10407 Berlin
E-Mail: contact@reclaim-ecofeministalliance.org


2. The rights of users and data subjects
‘Personal data’ is all information that relates to an identified or identifiable natural entity (e.g. name, address, telephone number, date of birth, e-mail address or usage behaviour).

‘Processing’ means any operation or set of operations, with or without the aid of automated methods, in connection with personal data, such as the collection, recording, organisation, ordering, storage, adaptation or alteration, read-out, querying, usage, disclosure through transmission, distribution or other form of provision, comparison or linkage, restriction, deletion, or destruction.

The ‘controller’ is the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the processing of personal data.


3. Information about the data processing
As a rule, it is possible to use our website without providing personal data. Insofar as personal data is collected on our pages, this is always done on a voluntary basis within the scope of the purpose limitation.
Your data processed when using our website will be deleted or blocked as soon as the purpose for its storage ceases to apply, provided the deletion of the same is not in breach of any statutory storage obligations or unless otherwise stipulated below.

Cookies
Our website does not use cookies, small text files that are stored on your end device.

Contact
Data transmission through our contact form is encrypted via e-mail. Despite the encryption, we would like to point out that data transmission on the Internet can have security gaps. Complete protection of data against access by third parties is not possible.

We offer you the possibility of contacting us via forms provided on the website. It is mandatory to provide your name and a valid e-mail address so that we know who the inquiry is from and can answer it. Further information can be provided voluntarily by you.

Data processing against the background of contacting us is carried out in accordance with Art. 6 Para. 1 lit. a DSGVO on the basis of your voluntarily given consent. Without your consent, which you must actively give before sending, you cannot contact us in this way.


4. Your rights
You may assert the following rights with regard to the personal data of which you are the subject:

– The right to information
– The right to correction or erasure
– The right to restriction of processing
– The right to object to processing
– The right to data portability.

You can also revoke your consent with effect for the future at any time.

You also have the right to submit a complaint to a data protection supervisory authority regarding the processing of your personal data by us.

5. Erasure of data
Your data is only stored for as long as is necessary for the provision of our services and the online offer, and no other statutory period of retention applies. Data that is subject to a statutory retention period is blocked until the corresponding retention period expires. This data is no longer available for further use.

6. Incorporation of services and content of third parties
On our website, services of third parties are used in order to include e.g. videos or fonts. This is done on the basis of Art. 6, Section 1 lit f) GDPR.

Facebook
Facebook Ireland Limited, 4 Grand Canal Square, Dublin 2, Ireland, a subsidiary of Facebook Inc., 1601 S. California Ave., Palo Alto, CA 94304, USA.

Privacy Policy: https://www.facebook.com/policy.php

Instagram
Facebook Ireland Limited, 4 Grand Canal Square, Dublin 2, Ireland, a subsidiary of Facebook Inc., 1601 S. California Ave., Palo Alto, CA 94304, USA.

Privacy Policy: https://help.instagram.com/519522125107875

YouTube
Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland, a subsidiary of Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043 USA

Privacy Policy: https://policies.google.com/privacy

Model Data Protection Statement for Anwaltskanzlei Weiß & Partner";
?>

<footer class="foter" style="background : <?= $color2?>;">
    <div class="foter_container">

        <div class="foter_data">
            <a href="#" class="openModalLink" data-value="<?= htmlspecialchars($imprint_data) ?>">Imprint</a>
            <a href="#" class="openModalLink" data-value="<?= htmlspecialchars($privacy) ?>">Privacy Policy</a>

        </div>

        <a style="color : <?= $color1?>;" class="foter_mail"
            href="mailto:reclaim@gmail.com">contact@reclaim-ecofeministalliance.org
        </a>
        <div class="foter_social">
            <!-- Facebook Icon -->
            <a href="https://www.facebook.com/people/Reclaim-Ecofeminist-Alliance/100091492013872/" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <!-- Instagram Icon -->
            <a href="https://www.instagram.com/reclaim.ecofeminist/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Telegram Icon -->
            <a href="https://t.me/reclaimecofeministalliance" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>

            <!-- YouTube Icon -->
            <a href="https://youtu.be/S4mVbO1B6mg" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>



        </div>
    </div>

    <?= snippet('privacy_data', ['text' => nl2br("hh")]) ?>



</footer>