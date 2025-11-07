<?php
class Database{private $h='localhost',$u='root',$p='',$d='hospital_system';function connect(){return new mysqli($this->h,$this->u,$this->p,$this->d);} }?>