<template >
  <TheContainer>
    <CRow>
    <CCol sm="6" lg="6">
      <CWidgetDropdown color="primary" :header="customers" text="Clientes Cadastrados">
        <template #default>
            <template >
              <CIcon name="cil-user"/>
            </template>
        </template>
        <template #footer>

        </template>
      </CWidgetDropdown>
    </CCol>
    <CCol sm="6" lg="6">
      <CWidgetDropdown color="info" :header="cities"  text="Cidades Cadastradas">
        <template #default>
            <template >
              <CIcon name="cil-location-pin"/>
            </template>
        </template>
        <template #footer>

        </template>
      </CWidgetDropdown>
    </CCol>
  </CRow>
  </TheContainer>
</template>

<script>
import TheContainer from "../Shared/TheContainer";
import WidgetsDropdown from '../Shared/widgets/WidgetsDropdown'

export default {
  components: { TheContainer, WidgetsDropdown },
  props: {
    customers: Number,
    cities: Number,
  },
};
</script>

<style >
</style>
