<footer class="footer bg-dark text-white py-4">
    <div class="container text-left">
        <p class="mb-2"><i class="fas fa-envelope"></i> <?php echo $data['footer']['email']; ?></p>
        <p class="mb-2"><i class="fas fa-phone"></i> <?php echo $data['footer']['phone']; ?></p>
        <p class="mb-2"><i class="fab fa-instagram"></i>
            <a href="<?php echo $data['footer']['instagram_course']; ?>" target="_blank" class="text-white">Instagram do Curso</a> |
            <a href="<?php echo $data['footer']['instagram_campus']; ?>" target="_blank" class="text-white">Instagram do Campus</a>
        </p>
        <p class="mt-3"><?php echo $data['footer']['copyright']; ?> <i>By Frank W. C. de Oliveira</i></p>
    </div>
</footer>