<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <inertia-link class="nav-link active" aria-current="page" href="/">Home</inertia-link>
            </li>
            <li class="nav-item">
              <inertia-link class="nav-link" href="/about">Sobre</inertia-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div>
      <slot />
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
