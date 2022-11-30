<?php


class Post {

    private  $author;
    private  $message;

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setMessage(string $message): void {
        $this->message = $message;
    }

    public function getMessage(): string {
        return $this->message;
    }

}