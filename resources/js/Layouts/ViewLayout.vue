<template>
    <div id="app">
        <NavigationView/>
        <slot></slot>
        <FooterView/>
    </div>
</template>

<script>
import NavigationView from "@/Components/View/NavigationView.vue";
import FooterView from "@/Components/View/FooterView.vue";
export default {
    components: {
        NavigationView, FooterView
    },
    name: "ViewLayout"
}
</script>

<style scoped>

</style>
