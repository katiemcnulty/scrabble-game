<template>
    <div>

        <div class="addMember">
            <!-- Button trigger modal -->
            <button type="button" class="btn " data-toggle="modal" data-target="#addMemberModal">
                Add Member
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="addMemberLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addMemberLabel">Add New Member</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="name">Name: <input type="text" placeholder="Enter Name"
                                    v-model="member.name"></label>
                            <label>Email: <input type="email" placeholder="Enter Email" v-model="member.email"></label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close" data-dismiss="modal" ref="close">Close</button>
                            <button type="button" class="btn " @click="addMember()">Add Member</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</template>
<script>
    import memberList from './memberList.vue'
    export default {
        components: {
            memberList
        },
        data: function () {
            return {
                member: {
                    name: '',
                    email: ''
                }
            }
        },
        methods: {
            addMember() {
                if (this.member.name && this.member.email == '') {
                    return
                }

                axios.post('/member/store', {
                        member: {
                            name: this.member.name,
                            email: this.member.email
                        }
                    })
                    .then(response => {
                        if (response.status == 201) {
                            this.member.name = "";
                            this.member.email = "";
                            this.$refs.close.click();
                            this.$root.$emit('reloadlist');
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        }


    }

</script>


<style scoped>
    .addMember {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    .addMember input {
        border: 1px #94a1b2 solid;
        margin: 1em;
        padding: 0.5em;
    }

    button {
        justify-content: center;
        align-items: center;
        background-color: #7f5af0;
        color: #fffffe;
        opacity: 0.8;
        transition: 0.4s;
    }

    button:hover {
        background-color: #2cb67d;
        opacity: 1;
    }

    .modal {
        color: #16161a;
        background-color: #16161a;
    }

    .close:hover,
    .btn-close:hover {
        background-color: #f05a73;
        color: #fffffe;
        opacity: 1;

    }

</style>
