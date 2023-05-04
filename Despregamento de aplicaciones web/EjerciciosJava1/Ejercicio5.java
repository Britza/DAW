import java.util.Scanner;
public class Ejercicio5 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Ingrese una frase: ");
        String frase = sc.nextLine();

        int indiceM = frase.indexOf('m');
        int indiceB = frase.indexOf('b');
        int indiceY = frase.indexOf('y');

        if (indiceM != -1) {
            System.out.println("La primera letra 'm' se encuentra en la posición " + indiceM);
        } else if (indiceB != -1) {
            System.out.println("La primera letra 'b' se encuentra en la posición " + indiceB);
        } else if (indiceY != -1) {
            System.out.println("La primera letra 'y' se encuentra en la posición " + indiceY);
        } else {
            System.out.println("La frase no contiene las letras 'm', 'b' o 'y'");
        }
    }
}
