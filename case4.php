<?php
class Student {
    public $name;
    public $grade;

    function __construct($name, $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }
}

class StudentGroup {
    public $students;

    function __construct($students) {
        $this->students = $students;
    }

    function calculateAverage() {
        $total = 0;
        $count = count($this->students);

        foreach ($this->students as $student) {
            $total += $student->grade;
        }

        $average = $count > 0 ? $total / $count : 0;

        return $average;
    }

    function moveStudent($student, $destinationGroup) {
        $key = array_search($student, $this->students, true);
        if ($key !== false) {
            unset($this->students[$key]);
        }

        $destinationGroup->students[] = $student;
    }
}

$student1 = new Student("John", 85);
$student2 = new Student("Jane", 92);
$student3 = new Student("Bob", 78);
$student4 = new Student("Alice", 89);
$student5 = new Student("Charlie", 95);
$student6 = new Student("David", 80);
$student7 = new Student("Eva", 88);
$student8 = new Student("Frank", 76);
$student9 = new Student("Grace", 94);
$student10 = new Student("Hank", 81);
$student11 = new Student("Ivy", 87);
$student12 = new Student("Jack", 91);
$student13 = new Student("Karen", 79);
$student14 = new Student("Leo", 93);
$student15 = new Student("Mia", 82);
$student16 = new Student("Nathan", 90);
$student17 = new Student("Olivia", 84);
$student18 = new Student("Peter", 77);
$student19 = new Student("Quinn", 96);
$student20 = new Student("Rachel", 83);

$group1 = new StudentGroup([$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10]);
$group2 = new StudentGroup([$student11, $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20]);

echo "Average for Group 1: " . $group1->calculateAverage() . "<br>";
echo "Average for Group 2: " . $group2->calculateAverage() . "<br>";

// Sort the students in Group 1 based on grades in descending order
usort($group1->students, function ($a, $b) {
    return $b->grade - $a->grade;
});

// Get the top student in Group 1
$topStudentGroup1 = array_shift($group1->students);

// Sort the students in Group 2 based on grades in ascending order
usort($group2->students, function ($a, $b) {
    return $a->grade - $b->grade;
});

// Get the lowest grade student in Group 2
$lowestGradeStudentGroup2 = array_shift($group2->students);

// Check if there is a top student in Group 1 and a student in Group 2 before moving
if ($topStudentGroup1 && $lowestGradeStudentGroup2) {
    $group1->moveStudent($topStudentGroup1, $group2);
}

echo "<br>After moving the top student from Group 1 to Group 2:<br>";
echo "Average for Group 1: " . $group1->calculateAverage() . "<br>";
echo "Average for Group 2: " . $group2->calculateAverage() . "<br>";

?>