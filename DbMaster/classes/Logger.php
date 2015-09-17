<?php
class Log
{


    /**
     * @desc Writes to a file
     * @param $strFileName  The name of the file
     * @param $strData Data to be appended to the file
     */

    public function Write($strFileName, $strData)
    {

        if(!is_writable($strFileName))
        {
            die('Change your CHMOD permissions to '. $strFileName);
        }
        $handle = fopen($strFileName, 'a+');
        fwrite($handle, "\r". $strData );
        fclose($handle);
    }

    /**
     * @param $strFileName The name of the file
     * @return string
     */
    public function Read($strFileName){
        $handle =fopen($strFileName, 'r');
        return file_get_contents($strFileName);


    }
}

