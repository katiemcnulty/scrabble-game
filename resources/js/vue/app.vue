<template>
    <div class="container">
        <div class="heading">
            <h1>Members</h1>
        </div>
        <div class="buttons">
            <add-member />
            <add-game />
        </div>
        
        <member-list :members="members"/>
    </div>

</template>

<script>
    import addMember from "./addMember.vue"
    import MemberList from './memberList.vue'
    import addGame from './addGame.vue'


    export default {
        components: {
            addMember,
            MemberList,
            addGame
        },
        data: function () {
            return {
                members: []
            }
        },
        methods: {
            getList() {
                axios.get('/members')
                    .then(response => {
                        this.members = response.data
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        },
        created() {
            this.getList();
        }
    }

</script>

<style scoped>
    .container {
        background-color: #16161a;
        min-height: 100vh;
        min-width: 100vw;
        color: #fffffe;
    }

    .heading {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2em;
    }

    .modal-backdrop {
        background-color: #16161a;
        opacity: 1;
    }
    .buttons {
        display: flex;
        justify-content: center;
        
    }
</style>
