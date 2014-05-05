    var calendar = calendar || $('#calendar');
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth();
    y = date.getFullYear();


    calendar.fullCalendar({
        header: {
            left: 'prev, next today',
            center: 'title',
            right: 'month, basicWeek, basicDay'
        },
        editable: false,
        events: [{
            title: 'full practice',
            start: new Date(y, 3, 11, 18, 0),
            end: new Date(y, m, 11, 20, 0)
        }, {
            title: 'half practice',
            start: new Date(y, 3, 12, 13, 0),
            end: new Date(y, 3, 12, 14, 0)
        }, {
            title: 'full practice',
            start: new Date(y, 3, 18, 18, 0),
            end: new Date(y, 3, 18, 20, 0)
        }, {
            title: 'half practice',
            start: new Date(y, 3, 20, 13, 0),
            end: new Date(y, 3, 20, 14, 0)
        }, {
            title: 'practice too long',
            start: new Date(y, 3, 22, 18, 0),
            end: new Date(y, 3, 26, 23, 0)
        }, {
            title: 'Final Performance',
            start: new Date(y, 4, 2, 20, 0),
            end: new Date(y, 4, 2, 22, 0)
        }]
    });
