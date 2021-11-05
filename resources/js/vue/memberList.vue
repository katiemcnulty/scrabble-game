<template>

    <div>
               
        <div v-for="(member, index) in members" :key="index">
            
            <list-member :member="member" class="member" />
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
        justify-content: center;
        max-width: 50%;
        margin: auto;
        margin-top: 1em;
        padding: 1em;
    }

</style>
