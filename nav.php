<div class="row bg-dark">
            <div>
                <nav class="nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php if($_SERVER['REQUEST_URI'] =="/JeReessaye/index.php") {
                            echo "text-muted";
                        } else {
                            echo "text-white";
                        }?>">Contact</a>
                    </li>
                </nav>
            </div>
        </div>