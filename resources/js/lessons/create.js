$('input[name="lesson[start]"]').mask("00:00", {
    onKeyPress: function (value, event, element) {
        var hour = parseInt(time.slice(0, 2));
        var min = parseInt(time.slice(3, 5));
    },
});
$('input[name="lesson[end]"]').mask("00:00", {
    onKeyPress: function (value, event, element) {
        var hour = parseInt(time.slice(0, 2));
        var min = parseInt(time.slice(3, 5));
    },
});
