<?php

namespace App\Patterns\behavioral\strategy\QueueStrategy;

//use PhpAmqpLib\Message\AMQPMessage;
//use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * This class is only for example, currently I need only connecting with Redis
 */
class RabbitMqQueueStrategy implements QueueStrategyInterface
{
//    protected AMQPStreamConnection $connection;

    public function __construct()
    {
//        $this->connection = new AMQPStreamConnection(
//            'rabbitmq_host',
//             5672,
//            'user',
//            'password',
//            'vhost'
//        );
    }

    public function send(string $queueName, $data): void
    {
//        $channel = $this->connection->channel();
//
//        $msgBody = json_encode([
//            'email' => $data['email'],
//            'ebookPath' => $data['ebookPath']
//        ]);
//
//        $msg = new AMQPMessage(
//            $msgBody,
//            ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]
//        );
//
//        $channel->basic_publish($msg, '', $queueName);
//        $channel->close();
    }
}
