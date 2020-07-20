<template>
    <div>
        <informacion-paciente :paciente="info_paciente"></informacion-paciente>
        <estudios-paciente :estudios="estudios_paciente"></estudios-paciente>
    </div>
</template>


<script>
    export default {
        props: {
            api_token: {
                type: String,
                required: true
            }
        },

        data() {
            return {
                info_paciente: {
                    nombre: null,
                    apellido: null,
                    dni: null,
                    telefono: null,
                    obra_social: null,
                    historia_clinica: null,
                    direccion: null,
                },
                estudios_paciente: [],
            }
        },
        methods: {
            setData(response) {
                let datos = response['data']['data'];
                let paciente = this.info_paciente;
                
                this.getImages(datos['estudios']);
                paciente.nombre = datos.nombre;
                paciente.apellido = datos.apellido;
                paciente.obra_social = datos.obra_social;
                paciente.dni = datos.dni;
                paciente.telefono = datos.telefono;
                paciente.historia_clinica = datos.historia_clinica;
                paciente.direccion = datos.direccion;
            },
            getImages(estudios) {
                for (var i = 0; i < estudios.length; i++) {
                    this.estudios_paciente.push(estudios[i].imagen);
                }
            }
        },
        mounted() {
            axios
                .get('/api/user', {
                    headers: {
                        Authorization: 'Bearer ' + this.api_token, 
                    }
                })
                .then(response => this.setData(response))
                .catch(error => console.error());
        }
    }
</script>