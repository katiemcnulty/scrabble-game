<template>
    <div>
        <div class="addGame">

            <button type="button" class="btn " data-toggle="modal" data-target="#addGameModal">
                Add Game
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="addGameLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <!-- Modal header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="addGameLabel">Record New Game</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="dropdown player1score">
                                <select name="player1" v-model="game.player1" >
                                    <option value="" selected disabled hidden>Select player</option>
                                    <option v-for='(member, index) in members' v-bind:value="member.id" :key='index' >{{member.name}}</option>
                                </select>
                                <input type="text" placeholder="Enter Score" v-model="game.player1Score">
                            </div>

                            <div class="dropdown player2score">
                                
                                <select name="player2" v-model="game.player2" >
                                    <option value="" selected disabled hidden>Select player</option>
                                    <option v-for='(member, index) in members' v-bind:value="member.id" :key='index'>{{member.name}}</option>
                                </select>
                                <input type="text" placeholder="Enter Score" v-model="game.player2Score">
                            </div>

                        </div>

                        <!-- Modal Footer with buttons -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
                            <button type="button" class="btn" @click="addGame()">Record Game</button>
                        </div>
                    </div>
                </div>
            </div>
         

        </div>

    </div>
</template>

<script>
    export default {
        props: ['members'],
        data: function () {
            return {
                game: {
                    player1: '',
                    player2: '',
                    player1Score: '',
                    player2Score: ''
                }
            }
        },
        methods: {
            addGame() {
                axios.post('/game/store', {
                    game: {
                        player1: this.game.player1,
                        player2: this.game.player2,
                        player1Score: this.game.player1Score,
                        player2Score: this.game.player2Score
                    }
                })
                .then(response => {
                        if (response.status == 201) {
                            this.game.player1 = "";
                            this.game.player2= "";
                            this.game.player1Score= "";
                            this.game.player2Score= "";
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

    .addGame {
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .modal {
        color: #16161a;
    }

    .close:hover,
    .btn-close:hover {
        background-color: #f05a73;
        color: #fffffe;
        opacity: 1;

    }

</style>
