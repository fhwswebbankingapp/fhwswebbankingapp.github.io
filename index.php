<?php
/**
 * Created by PhpStorm.
 * User: Fabian Konrad
 * Date: 22.01.2019
 * Time: 23:02
 */
private class UseProtocoll extends SplEnum
{
    const __default = self::GET;
    const GET = 0;
    const GET_WITH_ATTACHMENTS = 1;
    const POST = 2;
}


if(isset($_POST))
{
    echo "in der Post-Clause";

}
elseif(isset($_GET) )
{
    echo "in der Get-Clause";
}
else
{
    echo "in der Else-Clause";
}

?>