import java.util.Random;

public class Maquina extends Participante{
    public Maquina() {}

    public Maquina(int victorias, int derrotas, int partidas, String nombre) {
        super(victorias, derrotas, partidas, nombre);
    }
    public int elegir() {
        Random rand = new Random();
        return rand.nextInt(2);
    }
}
