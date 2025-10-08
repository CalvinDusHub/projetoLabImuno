import { StyleSheet, View } from "react-native";
import { FlatList, Text, StatusBar } from 'react-native';

export default function Exames() {

    const MOCK_DATA = [
        { id: '1', name: 'Ana Silva', status: 'active', isVip: false },
        { id: '2', name: 'Bruno Costa (VIP)', status: 'active', isVip: true },
        { id: '3', name: 'Carla Dias', status: 'inactive', isVip: false },
        { id: '4', name: 'Daniel Alves', status: 'active', isVip: false },
    ];

    return (
        <View style={Estilo.container}>
            <View style={Estilo.header}>
                <FlatList
                    data={MOCK_DATA}
                    renderItem={({ item }) => (
                        <View style={Estilo.listItem}>
                            <Text style={Estilo.listItemText}>{item.name}</Text>
                        </View>
                    )}
                    keyExtractor={item => item.id}
                />

            </View>

        </View>
    )
}

const Estilo = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#fff',
        paddingTop: StatusBar.currentHeight || 0,
        paddingHorizontal: 20,
    },
    header: {
        marginBottom: 6
    },
    listItem: {
        backgroundColor: '#f0f0f0',
        padding: 15,
        marginVertical: 5,
        borderRadius: 8,
    },
    listItemText: {
        fontSize: 16
    }
})

