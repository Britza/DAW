
public class Main {
    public static void main(String[] args) {
        Maquina maquina = new Maquina();
        Usuario usuario = new Usuario();

        maquina.setVictorias(5);
        maquina.setDerrotas(3);
        maquina.setPartidas(8);
        maquina.setNombre("Máquina");

        usuario.setVictorias(3);
        usuario.setDerrotas(5);
        usuario.setPartidas(8);
        usuario.setNombre("Usuario");

        System.out.println("Victorias de la Máquina: " + maquina.getVictorias());
        System.out.println("Derrotas de la Máquina: " + maquina.getDerrotas());
        System.out.println("Partidas de la Máquina: " + maquina.getPartidas());
        System.out.println("Nombre de la Máquina: " + maquina.getNombre());

        System.out.println("Victorias del Usuario: " + usuario.getVictorias());
        System.out.println("Derrotas del Usuario: " + usuario.getDerrotas());
        System.out.println("Partidas del Usuario: " + usuario.getPartidas());
        System.out.println("Nombre del Usuario: " + usuario.getNombre());

        int resultadoMaquina = maquina.elegir();
        System.out.println("Resultado de la Máquina: " + resultadoMaquina);

        int resultadoUsuario = usuario.lanzarMoneda("Cara");
        System.out.println("Resultado del Usuario: " + resultadoUsuario);
    }
}