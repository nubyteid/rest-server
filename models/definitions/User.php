<?php

namespace app\models\definitions;

/**

* @SWG\Model(
* id="vps",
* required="['type', 'localhost']",
*  @SWG\Property(name="localhost", type="string"),
*  @SWG\Property(name="label", type="string"),
*  @SWG\Property(name="type", type="string", enum="['vps', 'dedicated']")
* )
 */

class HostVps extends Host implements ResourceInterface
{
    // ...
}