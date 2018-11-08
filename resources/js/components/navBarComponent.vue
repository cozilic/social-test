<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <a class="navbar-brand" href="#">Social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Friends</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Messages</a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Notifications <span class="badge badge-primary">3</span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        Notifications
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{user}}
                </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
  <a class="dropdown-item" href=""><i class="fas fa-user-circle"></i> My Profile</a>
  <div class="dropdown-divider"></div>
</div>
</li>
          </ul>
        </div>
    </nav>

    </div>
</template>

<script>
    export default {
    props: ['user'],
    data() {
        return {
            message: 'test',
        }
    },
    }
</script>

<style scoped>

</style>
