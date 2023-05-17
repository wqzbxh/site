<?php
/**
 * Created by : VsCode
 * User: Dumb Lake Monster (Wang Haiyang)
 * Date:  2023/4/15
 * Time:  19:51
 */

namespace app\Controller\common;


use libs\core\Curl\Curl;

class ChatGpt
{
    protected $key = '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';
    protected $chatGptUrl = 'https://api.openai.com/v1/chat/completions';

    public function sendImg($measge)
    {
        $curl = new Curl($this->chatGptUrl);
        $curl->setHeader('Authorization', 'Bearer '.$this->key);
        $curl->setHeader('Content-Type', 'application/json');
//        var_dump(json_encode($measge));exit;
        $data = [
            'messages' => array($measge),
            'temperature' => 0.7,
            'model' => 'gpt-3.5-turbo'
        ];
//        var_dump(json_encode($data));exit;
        $response = $curl->post(json_encode($data));
        $response_data = json_decode($response, true);
        var_dump($response_data);
        echo $response_data['choices'][0]['text'];exit;
    }
}