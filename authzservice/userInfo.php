<?php
header("Content-Type: application/x-www-form-urlencoded; charset=UTF-8");

// i spent hours getting this to work, its very very picky

echo "expires_in=3600&server_backoff=0&claims=" .
     "urn%3Abbid%3Ausername%3Dtestuser%3B" .
     "urn%3Abbid%3Aemail%3Dtest%40example.com%3B" .
     "urn%3Abbid%3Ascreenname%3DTestScreen%3B" .
     "urn%3Abbid%3Afirstname%3DTest%3B" .
     "urn%3Abbid%3Alastname%3DUser%3B" .
     "urn%3Abbid%3Auid%3D1234567890%3B" .
     "urn%3Abbid%3Aswguid%3DABCDEF123456%3B" .
     "urn%3Abbid%3Adob%3D1990-01-01%3B" .
     "urn%3Abbid%3Acc%3DUS";