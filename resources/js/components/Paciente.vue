<template>
    <informacion-paciente></informacion-paciente>
</template>


<script>

    export default {
        data() {
            return {

            }
        },

        created() {
            this.fetchPaciente();
        },
        methods: {
            fetchPaciente() {
                fetch('api')
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>