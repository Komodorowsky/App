use strict;
use warnings;
use LWP::UserAgent;
use JSON;

# URL de la API REST
my $api_url = 'https://api.escuelajs.co/api/v1/users    ';

# Crear un objeto LWP::UserAgent
my $ua = LWP::UserAgent->new;

# Realizar la solicitud GET a la API
my $response = $ua->get($api_url);

# Manejar errores en la solicitud
unless ($response->is_success) {
    die "Error en la solicitud: " . $response->status_line;
}



# Decodificar la respuesta JSON
my $data;
eval {
    $data = decode_json($response->content);
};
if ($@) {
    die "Error al decodificar la respuesta JSON: $@";
}

# Verificar si los datos son válidos
unless (ref $data eq 'ARRAY') {
    die "Los datos de la API no son válidos.";
}

# Mostrar los datos en una tabla
print "----------------------------------------------\n";
printf "%-5s | %-20s | %-5s\n", "ID", "Nombre", "Edad";
print "----------------------------------------------\n";

foreach my $item (@$data) {
    my $id = $item->{'id'} // '';
    my $nombre = $item->{'name'} // '';
    my $edad = $item->{'email'} // '';
    printf "%-5s | %-20s | %-5s\n", $id, $nombre, $edad;
}

print "----------------------------------------------\n";
