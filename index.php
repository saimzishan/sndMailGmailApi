<?php

function sendMessage($service, $message) {
    try {
        $message = $service->users_messages->send('me', $message);
        print 'Message with ID: ' . $message->getId() . ' sent.';
        return $message;
    } catch (Exception $e) {
        print 'An error occurred: ' . $e->getMessage();
    }
}