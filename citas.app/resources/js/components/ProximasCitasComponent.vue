<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <br>
                <div class="card">

                    <div class="card-body">
                      <div class="badge badge-primary text-wrap" style="width: 7rem;">
                        Próximas Citas
                      </div>
                      <br>
                      <br>
                      <!-- table-siguientes citas -->
                      <div>
                        <b-table sticky-header hover small :fields="fields" :items="items"  head-variant="light"></b-table>
                      </div>
                      <!-- table-siguientes citas -->
                    </div>
                    <!-- siguientes citas -->
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
