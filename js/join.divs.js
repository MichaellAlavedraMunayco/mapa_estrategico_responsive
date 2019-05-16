var a = document.getElementById('p3t1o1');
var b = document.getElementById('p2t1o1');
var c = document.getElementById('p1t2o1');
new LeaderLine(a, b, { color: 'black', size: 2, startPlug: 'disc', path: 'fluid', startSocket: 'top' });
new LeaderLine(b, c, { color: 'black', size: 2, startPlug: 'disc', path: 'fluid', startSocket: 'top', endSocket: 'left' });

$('#csPerspectivas').colorselector();
$('#csTemas').colorselector();
$('#csGrupos').colorselector();
$('#csScore').colorselector();
$('#csIndicador').colorselector();

$("input[type='number']").inputSpinner();