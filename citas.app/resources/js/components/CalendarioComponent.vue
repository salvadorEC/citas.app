<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <br>
                <div class="card">
                    <div class="card-header text-info bg-dark"><i class="far fa-calendar-alt"></i> Objeto7071:Calendario</div>
                    <!-- calendario-->
                    <div class="card-body">
                      <v-calendar is-expanded locale="es" :attributes='attrs' />
                    </div>
                    <!-- calendario-->
                    <!-- siguientes citas -->
                    <div class="card-body">
                      <div class="badge badge-primary text-wrap" style="width: 6rem;">
                        Próximas Citas
                      </div>
                      <br>
                      <br>
                      <!-- table-siguientes citas -->
                      <div>
                        <b-table sticky-header  :items="items" head-variant="light"></b-table>
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
        },
      ],
      items: [
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' },
          { 'heading 1': 'table cell', 'heading 2': 'table cell', 'heading 3': 'table cell' }
        ],
    };
  },
};


</script>
