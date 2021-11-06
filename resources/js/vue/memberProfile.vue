<template>
<div>

    <!-- Button trigger modal -->
            <button type="button" class="btn " data-toggle="modal" :data-target="'#viewProfileModal' + member.id">
                View Profile 
            </button>

    <!-- Modal -->
            <div class="modal fade" :id="'viewProfileModal' + member.id" tabindex="-1" role="dialog" aria-labelledby="viewProfileLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewProfileLabel">Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h1>{{ member.name }}</h1>
                            <h2>{{member.email}}</h2>
                            <hr>
                            <p>Number of wins: {{member.wins}} </p>
                            <p>Number of loses: {{member.loses}}</p>
                            <hr>
                            <p>Average Score: {{member.averageScore}}</p>
                            <p>Highest Score: </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-close" data-dismiss="modal" ref="close">Close</button>                            
                        </div>
                    </div>
                </div>
            </div>
    
</div>
</template>

<script>
export default {
    props: ['member'],
}
</script>

<style scoped>

</style>