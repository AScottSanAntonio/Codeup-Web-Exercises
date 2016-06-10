'use strict';

document.getElementById("add-grade").disabled = true;
document.getElementById("calculate-average").disabled = true;

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
}
//use listeners to disable the addSubject and calculateAverage buttons on page start up.
//buttons enabled after hitting save
//buttons move the values entered for grades up so that they can be calculated in an average
//hidden values are changed to be visible via a listener

//listener for save-name needs to allow for the save button to push the entered values in the 'What's your name?' field to the saved names catagory.
//