import { Text, View } from "react-native";

export default function Home() {
    return(
    <View style={Estilo.container}>
        <View style={Estilo.topBar}>
            <Text style={Estilo.textobarra}>Pagina linda!</Text>
        </View>

        <View style={styles.content}>
            <Text>Aqui vai o conteúdo da sua página</Text>
        </View>
    </View>
    )
}

const Estilo = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  topBar: {
    height: 60,
    backgroundColor: "#007BFF", // Azul
    justifyContent: "center",
    alignItems: "center",
    paddingTop: 10, // espaço extra para status bar em alguns dispositivos
  },
  textobarra: {
    fontSize: 20
  },
  content: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  }
});