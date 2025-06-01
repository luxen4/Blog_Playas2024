
<?php

function getAdcashLibTag()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://adbpage.com/adblock?v=3'); // Solo si es oficial
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch); 
    curl_close($ch);
    return $content;
}

echo getAdcashLibTag();
?>

</script>