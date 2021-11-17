<?php

class MeuFiltro extends php_user_filter
{

    public $stream;
    public function onCreate()
    {
        //fornece dados temporarios
      $this->stream =  fopen('php://temp', 'w+');
      return $this->stream !== false;
    }

    public function filter($in,$out,&$consumed, $closing)
    {
        $saida = '';

        //Enquanto conseguir transformar o stream (arquivo) em algo utilizavel
        //em algo que possa ser manipulado , eu vou executar esse codigo
        while ($bucket = stream_bucket_make_writeable($in)){
            //divide o arquivo pela quebra de linha
            $linhas = explode("\n",$bucket->data);
            
            foreach($linhas as $linha){
                if(stripos($linha,'parte') !== false) {
                    $saida .= "$linha\n";
                }
            }

            $bucketSaida = stream_bucket_new($this->stream, $saida);
            stream_bucket_append($out,$bucketSaida);

            return PSFS_PASS_ON;
        }
    }
}