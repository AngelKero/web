var edad = 17;

if (edad >= 18) {
    document.write('Eres mayor de edad');
}else{
    document.write('Eres menor de edad');
}

var pais = 'España';

switch (pais) {
    case 'Mexico':
        document.write('<br>' + 'Eres Mexicano uwu');
        break;
    case 'España':
        document.write('<br>' + 'Eres de españa chaval, saca la onda vital tio');
        break;
    default:
        document.write('<br>' + 'No Conocemos tu pais u.u');
        break;
}