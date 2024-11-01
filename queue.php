<?php
class Queue {
    private $items = [];

    // Action that adds new data to the Queue
    public function enqueue($item) {
        array_push($this->items, $item);
        echo "$item has been added to the queue.\n";
    }

    // Action that removes data from the front of the queue
    public function dequeue() {
        if (empty($this->items)) {
            return "Queue is empty.";
        }
        return array_shift($this->items);
    }

    // Check that the queue is empty
    public function isEmpty() {
        return empty($this->items);
    }

    // Display the data in the queue
    public function display() {
        if (empty($this->items)) {
            echo "Queue is empty.\n";
        } else {
            echo "Data in Queue: " . implode(", ", $this->items) . "\n";
        }
    }
}

// Creates a Queue
$queue = new Queue();
$queue->enqueue("10");
$queue->enqueue("20");
$queue->enqueue("30");

$queue->display();

// Dequeue until the queue is empty
while (!$queue->isEmpty()) {
    echo "Data removed from Queue: " . $queue->dequeue() . "\n";
    $queue->display();
}
?>
