<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white-50 bg-dark">
                      Objeto7070: Elegir Doctor
                    </div>
                    <div class="card-body">
                      <div>
                        <b-form-select v-model="seleccionado" class="mb-3">
                          <!-- This slot appears above the options from 'options' prop -->
                          <template slot="first">
                            <option :value="null" disabled>-- seleccione un doctor --</option>
                          </template>
                          <!-- These options will appear after the ones from 'options' prop -->
                          <option v-for="doctor in options" :key="doctor.id">{{doctor.name}}</option>
                        </b-form-select>
                        <div class="mt-3">Doctor seleccionado: <strong>{{ seleccionado }}</strong></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        seleccionado: null,
        options: []
      }
    },
    created(){
      axios.get('./api/user')
       .then(response => this.options = response.data);
    }
    }
</script>
