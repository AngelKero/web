var amigos = ['Juan', 'Manolo', 'Isaac', 'Marcelo'];

for (amigo in amigos) {
    document.write(amigos[amigo]);
    document.write('<br>');

    if (amigos[amigo] == 'Isaac') {
        break;
    }
}
document.write('<hr>');
for (amigo in amigos) {
    if (amigos[amigo] == 'Isaac') {
        continue;
    }

    document.write(amigos[amigo]);
    document.write('<br>');
}