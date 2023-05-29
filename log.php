<?php
class Worker {
  private $name;
  private $hireDate;
  
  public function __construct($name, $hireDate) {
    $this->name = $name;
    $this->hireDate = $hireDate;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getHireDate() {
    return $this->hireDate;
  }
  
  public function getExperience() {
    $now = time();
    $hireDate = strtotime($this->hireDate);
    $difference = $now - $hireDate;
    $years = floor($difference / (365 * 24 * 80 * 60));
    return $years;
  }
}
$workers = array(
  new Worker('Джон', '2010-05-01'),
  new Worker('Джэйн', '2008-10-01'),
  new Worker('Боб', '2006-07-01'),
  new Worker('Алиса', '2004-03-01')
);


$filterYears = 10;


$filteredWorkers = array();


foreach ($workers as $worker) {
  if ($worker->getExperience() >= $filterYears) {
    $filteredWorkers[] = $worker;
  }
}


echo '<ul>';
foreach ($filteredWorkers as $worker) {
  echo '<li>' . $worker->getName() . '</li>';
}
echo '</ul>';

class Worker1 {
  public $name;
  public $salary;
  public $experience;

  function __construct($name, $salary, $experience) {
    $this->name = $name;
    $this->salary = $salary;
    $this->experience = $experience;
  }
}

$employees = array(
  new Worker1("Джон", 2500, 5),
  new Worker1("Джэйн", 3000, 7),
  new Worker1("Боб", 2000, 2),
  new Worker1("Алиса", 3500, 10),
  new Worker1("Алексей", 6600, 15)
);
$specifiedSalary = 3000;
foreach ($employees as $worker1) {
  if ($worker1->salary > $specifiedSalary) {
    echo $worker1->name . " - $" . $worker1->salary . " - " . $worker1->experience . " годы опыта <br>";
  }
}

class Worker2 {
  public $name;
  public $position;
  public $salary;

  function __construct($name, $position, $salary) {
    $this->name = $name;
    $this->position = $position;
    $this->salary = $salary;
  }
}


$workers = array(
  new Worker2("Джон", "Manager", 5000),
  new Worker2("Джэйн", "Programmer", 4000),
  new Worker2("Боб", "Designer", 3500),
  new Worker2("Алиса", "Programmer", 4500)
);


$position = "Programmer";

$filtered_workers = array_filter($workers, function($worker2) use ($position) {
  return $worker2->position == $position;
});

echo "<h3>Список людей удерживающие должность$position:</h3>";
echo "<ul>";
foreach ($filtered_workers as $worker2) {
  echo "<li>$worker2->name</li>";
}
echo "</ul>";

class Train {
    private $destination;
    private $departureTime;
    private $arrivalTime;

    public function __construct($destination, $departureTime, $arrivalTime) {
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getDepartureTime() {
        return $this->departureTime;
    }

    public function getArrivalTime() {
        return $this->arrivalTime;
    }
}


$trains = array(
    new Train("Нью Йорк", "09:00 ", "11:30 "),
    new Train("Бостоn", "10:00 ", "12:30 "),
    new Train("Россия", "12:00 ", "03:00 "),
    new Train("Сан франциско", "02:00 ", "06:00 "),
    new Train("Вашингтон", "03:00 ", "06:30 ")
);


function filterTrainsByDestination($trains, $destination) {
    $filteredTrains = array();
    foreach ($trains as $train) {
        if ($train->getDestination() == $destination) {
            $filteredTrains[] = $train;
        }
    }
    return $filteredTrains;
}


$destination = "Бостоn";
$filteredTrains = filterTrainsByDestination($trains, $destination);


echo "Поезд до " . $destination . ":<br>";
foreach ($filteredTrains as $train) {
    echo $train->getDestination() . " прибудет в  " . $train->getDepartureTime() . " и прибудет вt " . $train->getArrivalTime() . "<br>";
}


?>
<?php
class Train {
    public $name;
    public $destination;
    public $departureTime;

    public function __construct($name, $destination, $departureTime) {
        $this->name = $name;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
    }
}


$trains = array(
    new Train("Экспресс 1", "Нью Йорк", "08:00"),
    new Train("Экспресс 2", "Бостон", "08:30"),
    new Train("Экспресс 3", "Нью Йорк", "09:00"),
    new Train("Экспресс 4", "Филадейфия", "09:30"),
    new Train("Экспресс 5", "Нью Йорк", "10:00"),
    new Train("Экспресс 6", "Бостон", "10:30"),
    new Train("Экспресс 7", "Нью Йорк", "11:00"),
    new Train("Экспресс 8", "Филадейфия", "11:30"),
);
function getTrainsByDestinationAndName($trains, $destination, $name) {
    $result = array();
    foreach ($trains as $train) {
        if ($train->destination == $destination && strpos($train->name, $name) !== false) {
            $result[] = $train;
        }
    }
    return $result;
}
$destination = "Нью Йорк";
$name = "Экспресс";
$filteredTrains = getTrainsByDestinationAndName($trains, $destination, $name);
echo "<h2>Поезда следут  $destination и имеют  \"$name\" в их имени :</h2>";
echo "<ul>";
foreach ($filteredTrains as $train) {
    echo "<li>" . $train->name . " - departing at " . $train->departureTime . "</li>";
}
echo "</ul>";


?>
<?php
class Train {
    private $name;
    private $destination;
    private $departureTime;
    
    public function __construct($name, $destination, $departureTime) {
        $this->name = $name;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getDestination() {
        return $this->destination;
    }
    
    public function getDepartureTime() {
        return $this->departureTime;
    }
}

$trains = array(
    new Train("Поезд  1", "Нью Йорк", "08:00"),
    new Train("Поезд 2", "Чикаго", "09:30"),
    new Train("Поезд  3", "Нью Йорк", "11:00"),
    new Train("Поезд 4", "Бостон", "12:30"),
    new Train("Поезд  5", "Чикаго", "14:00"),
    new Train("Поезд 6", "Нью Йорк", "15:30"),
    new Train("Поезд  7", "Бостон", "17:00"),
    new Train("Поезд 8", "Чикаго", "18:30"),
    new Train("Поезд  9", "Нью Йорк", "20:00"),
    new Train("Поезд 10", "Бостон", "21:30"),
);

$destination = "Нью Йорк";
$departureTime = "12:00";


echo "Поезд до  " . $destination . " отправляется после " . $departureTime . ":<br>";
echo "<ul>";
foreach ($trains as $train) {
    if ($train->getDestination() == $destination && $train->getDepartureTime() >= $departureTime) {
        echo "<li>" . $train->getName() . "</li>";
    }
}
echo "</ul>";
?>
