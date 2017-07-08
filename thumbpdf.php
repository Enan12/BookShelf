<?php
/** <img src="/path/to/thumbPdf.php?pdf=your.pdf&size=200" />
 * Created by PhpStorm.
 * User: avash
 * Date: 5/1/16
 * Time: 10:36 PM
 */

function thumbPdf($pdf, $width)
{
    try
    {
        $tmp = 'covers';
        $format = "png";
        $source = $pdf.'[0]';
        $dest = "$tmp/$pdf.$format";
        if (!file_exists($dest))
        {
            $exec = "convert -scale $width $source $dest";
            exec($exec);
        }

        $im = new Imagick($dest);
        header("Content-Type:".$im->getFormat());
        echo $im;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
}

$file = $_GET['pdf'];
$size = $_GET['size'];
if ($file && $size)
{
    thumbPdf($file, $size);
}
?>