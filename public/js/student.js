'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
};

var saveButton = document.getElementById('save-name');
var addAndContinueButton = document.getElementById('add-grade');
var addAndAverageButton = document.getElementById('calculate-average');

function saveName() {
    var studentName = document.getElementById('name');
    student.name = studentName.value;
    addAndContinueButton.removeAttribute('disabled');
    addAndAverageButton.removeAttribute('disabled');
    document.getElementById('student-name').innerText = student.name;
}

function noGavin() {
    var subjectName = document.getElementById('subject');
    var subjectGrade = document.getElementById('grade');

    student.addSubject(subjectName.value, parseInt(subjectGrade.value));

    var tableBody = document.getElementById('grades');
    tableBody.innerHTML = '<tr><td>' + subjectName.value + '</td><td>' + subjectGrade.value + '</td></tr>' + tableBody.innerHTML;

    subjectName.value = '';
    subjectGrade.value = '';
}

function noAbbreviationsGavin() {
    noGavin();
    var average = student.calculateAverage();
    document.getElementById('student-average').innerText = average;

    if (student.isAwesome()) {
        document.getElementById('student-awesome').removeAttribute('class');
        document.getElementById('student-practice').setAttribute('class', 'hidden');
    } else {
        document.getElementById('student-practice').removeAttribute('class');
        document.getElementById('student-awesome').setAttribute('class', 'hidden');
    }

    addAndContinueButton.setAttribute('disabled', true);
    addAndAverageButton.setAttribute('disabled', true);
}

saveButton.addEventListener('click', saveName);
addAndContinueButton.addEventListener('click', noGavin);
addAndAverageButton.addEventListener('click', noAbbreviationsGavin);