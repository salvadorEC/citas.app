<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <br>
                <div class="card">
                    <div class="card-header text-info bg-dark"><i class="far fa-calendar-alt"></i> calendario</div>
                      <!-- calendario-->
                      <div class="card-body">
                        <div class="badge badge-dark text-wrap" style="width: 7rem;">
                          Gestionar Citas
                        </div>
                        <br>
                        <br>
                        <v-calendar is-expanded locale="es" :attributes='attrs'/>
                      </div>
                      <!-- calendario-->
                      <!-- tabla citas -->
                      <div class="card-body">
                        <div>
                          <b-table hover small :fields="fields" :items="items"></b-table>
                        </div>
                      </div>
                      <!-- tabla citas -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
  data() {
    return {
      attrs: [
        {
          key: 'today',
          highlight: true,
          dates: new Date(),
        }
      ],
      fields: [
        {key:'fecha_cita', label:'Fecha'},
        {key:'hora_cita', label:'Hora'},
        {key:'nombre_pacientes', label:'Paciente'},
        {key:'tratamiento_tratamientos', label:'Tratamiento'}
      ],
      items:[]
    }
  },
  created(){
    axios.get('./api/cita')
     .then(response => this.items = response.data);
  }
};


</script>
