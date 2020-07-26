<template>
    <div>
        <form @submit="sendUserData">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="input-direccion">Dirección</label>
                    <input type="text" class="form-control" id="input-direccion" name="direccion"
                        v-model="paciente.direccion">
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <label for="input-dni">DNI</label>
                    <input type="text" class="form-control" id="input-dni" name="dni" v-model="paciente.dni" required>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <label for="input-telefono">Teléfono</label>
                    <input type="text" class="form-control" id="input-telefono" name="telefono"
                        v-model="paciente.telefono">
                </div>
            </div>

            <hr>

            <div class="form-group row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary mr-3">Guardar</button>
                    <button type="button" class="btn btn-outline-secondary" onclick="history.back()">Cancelar</button>
                </div>
            </div>
        </form>
        <footer>
            <p class="text-danger">Si desea cambiar algún dato adicional, por favor, comuníquese con el
                médico.</p>
        </footer>
    </div>
</template>

<script>
    export default {
        props: {
            paciente: {
                required: true
            }
        },
        methods: {
            sendUserData: function () {
                eventBus.$emit('info-editada', this.paciente);
    } 
}
    }
</script>



