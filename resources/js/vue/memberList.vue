<template>

    <div>
               
        <div v-for="(member, index) in members" :key="index">
            
            <list-member :member="member" class="member" v-on:itemchanged="$emit('reloadlist')"/>
        </div>
    </div>
</template>

<script>
    import listMember from './listMember.vue'
    export default {
        props: ['members'],
        components: {
            listMember
        }

    }

</script>

<style scoped>
    .member {
        display: flex;
        max-width: 50%;
        margin: auto;
        margin-top: 1em;
        padding: 1em;
    }

</style>
