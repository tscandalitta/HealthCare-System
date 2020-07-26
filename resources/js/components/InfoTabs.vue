<template>
    <div>
        <div class="row">
        <ul>
          <span class="tabs" 
                :class="{ activeTab: selectedTab === tab }"
                v-for="tab in tabs"
                @click="selectedTab = tab"
                :key="tab"
          >{{ tab }}</span>
        </ul>
        </div>

        <div v-show="selectedTab === 'Ver datos'">
            <mostrar-info-paciente :paciente="paciente"></mostrar-info-paciente>
            <estudios-paciente :estudios="estudios"></estudios-paciente>
        </div>

        <div v-show="selectedTab === 'Editar datos'">
            <editar-info-paciente :paciente="paciente"></editar-info-paciente>
        </div>
    
      </div>
</template>

<script>
export default {
    props: {
        paciente: {    
            required: true
        },
        estudios: {    
            required: true
        }
    },
    data() {
        return {
            tabs: ['Ver datos', 'Editar datos'],
            selectedTab: 'Ver datos'
        }
    },
    methods: {
    },
}
</script>

<style>
    .tabs {
        margin-right: 20px;
        cursor: pointer; 
    }

    .activeTab {
        color: #16C0B0;
        text-decoration: underline;
        
    }
</style>