<template >
    <layout>
        <div>
            Olá {{ user }} você está na home.
        </div>
    </layout>
</template>

<script>
import Layout from "../Shared/Layout";

export default {
    components: { Layout },
    props: {
        user: String
    }
}
</script>

<style >

</style>
